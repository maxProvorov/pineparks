document.addEventListener('DOMContentLoaded', function () {
    const num1 = document.getElementById('num1');
    const num2 = document.getElementById('num2');
    const method = document.getElementById('method');
    const result = document.getElementById('result');

    function calculate() {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo admin_url('admin - ajax.php'); ?>', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                result.textContent = 'Result: ' + xhr.responseText;
            }
        };
        xhr.send('action=calculate&num1=' + num1.value + '&num2=' + num2.value + '&method=' + method.value);
    }

    num1.addEventListener('input', calculate);
    num2.addEventListener('input', calculate);
    method.addEventListener('change', calculate);
});