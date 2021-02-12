let $input    = document.getElementById('self')
let $fileName = document.getElementById('file-name');

$input.addEventListener('change', function(){
    $fileName.textContent = this.value;
});


