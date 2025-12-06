const dbtn= document.getElementById('dbtn');
const dform= document.getElementById('dform');

dform.addEventListener('submit',function(){
     dbtn.disabled = true;

                dform.textContent = 'Logging out...';
});