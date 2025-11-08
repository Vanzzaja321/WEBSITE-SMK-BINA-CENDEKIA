// spmb.js - SMK BINA CENDEKIA
(function(){
  const form = document.getElementById('regForm');
  const filesInput = document.getElementById('files');
  const fileDrop = document.getElementById('fileDrop');
  const progBar = document.getElementById('progBar');
  const msg = document.getElementById('msg');
  const saveBtn = document.getElementById('saveBtn');

  // drag & drop UX
  ['dragenter','dragover'].forEach(ev=>{
    fileDrop.addEventListener(ev, e=>{
      e.preventDefault();
      fileDrop.style.borderColor='rgba(0,86,179,0.6)';
      fileDrop.style.background='rgba(30,144,255,0.02)';
    });
  });
  ['dragleave','drop'].forEach(ev=>{
    fileDrop.addEventListener(ev, e=>{
      e.preventDefault();
      fileDrop.style.borderColor='transparent';
      fileDrop.style.background='transparent';
    });
  });

  fileDrop.addEventListener('drop', e=>{
    const f = (e.dataTransfer && e.dataTransfer.files) || [];
    filesInput.files = f;
    previewFiles();
  });

  filesInput.addEventListener('change', previewFiles);

  function previewFiles(){
    const files = filesInput.files;
    if(!files || files.length===0){
      document.getElementById('fileHint').textContent = 'Tarik & lepas atau klik untuk memilih file — maksimal 5 file.';
      return;
    }
    const names = [];
    for(let i=0;i<Math.min(files.length,5);i++){
      names.push(files[i].name);
    }
    document.getElementById('fileHint').textContent = names.join(' • ');
  }

  function fakeUploadProgress(cb){
    progBar.style.width = '0%';
    let p = 0;
    const id = setInterval(()=>{
      p += Math.random()*18;
      if(p>=100){
        p=100;
        progBar.style.width = p + '%';
        clearInterval(id);
        setTimeout(cb,300);
      }
      progBar.style.width = Math.round(p)+'%';
    }, 280);
  }

  form.addEventListener('submit', (e)=>{
    e.preventDefault();
    const required = ['nama','nisn','email','hp','ttl','asal'];
    for(const id of required){
      if(!document.getElementById(id).value.trim()){
        return showMsg('Mohon lengkapi semua kolom wajib.','error');
      }
    }
    showMsg('Mengunggah data...','info');
    fakeUploadProgress(()=>{
      showMsg('Pendaftaran berhasil! Cek dashboard untuk status verifikasi.','success');
      form.reset();
      document.getElementById('fileHint').textContent='Tarik & lepas atau klik untuk memilih file — maksimal 5 file.';
      progBar.style.width='0%';
    });
  });

  saveBtn.addEventListener('click', ()=>{
    showMsg('Draft disimpan di browser (lokal).','info');
    const data = new FormData(form);
    const obj = {};
    data.forEach((v,k)=> obj[k]=v);
    localStorage.setItem('spmb_draft', JSON.stringify(obj));
  });

  function showMsg(text, type){
    msg.textContent = text;
    if(type==='error') msg.style.color = '#cc1f1f';
    else if(type==='success') msg.style.color = '#0f5132';
    else msg.style.color = 'var(--muted)';
  }

  document.addEventListener('DOMContentLoaded', ()=>{
    const a = document.getElementById('stat-applied');
    const b = document.getElementById('stat-open');
    const c = document.getElementById('stat-verified');
    if(a&&b&&c){
      a.textContent = Intl.NumberFormat('id-ID').format(1248);
      b.textContent = Intl.NumberFormat('id-ID').format(120);
      c.textContent = Intl.NumberFormat('id-ID').format(842);
    }

    try{
      const d = localStorage.getItem('spmb_draft');
      if(d){
        const obj = JSON.parse(d);
        for(const k in obj){
          const el = document.getElementsByName(k)[0];
          if(el) el.value = obj[k];
        }
      }
    }catch(e){/* ignore */}
  });
})();