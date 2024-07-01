<?php


$text = get_field('calc_text');
$image = get_field('calc_image');
?>
<div class="main wrapper">
    <div class="main__left">
        <div class="main__image-content">
            <?php echo wp_get_attachment_image($image['id'], 'full'); ?>
        </div>
    </div>

    <div class="main__right">
        <div class="main__subtitle">
            Serengeti, the ultimate wildlife experience
        </div>
        <div class="main__title">
            <?php echo $text; ?>
        </div>
        <div class="main__indicators">
            <div class="main__indicator">
                <div class="indicator__count">12 000</div>
                <div class="indicator__desc">square miles</div>
            </div>
            <div class="main__indicator">
                <div class="indicator__count">30%</div>
                <div class="indicator__desc">of Tanzania is National Parks</div>
            </div>
            <div class="main__indicators-item"></div>
        </div>
        <div class="main__calculator">
            <div class="calculator__wrap">
                <input type="number" class="calculator__input" id="num1">
                <div class="calculator__select-wrapper">
                    <select id="method" class="calculator__select">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>

                </div>
                <input type="number" class="calculator__input" id="num2">
            </div>
            <div id="result" class="calculator__result"><span>Result:</span></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const num1 = document.getElementById('num1');
        const num2 = document.getElementById('num2');
        const method = document.getElementById('method');
        const result = document.getElementById('result');

        function calculate() {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo admin_url('admin-ajax.php'); ?>', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    result.innerHTML = '<span>Result: </span>' + xhr.responseText;
                }
            };

            const encodedMethod = encodeURIComponent(method.value);

            xhr.send('action=calculate&num1=' + num1.value + '&num2=' + num2.value + '&method=' + encodedMethod);
        }

        num1.addEventListener('input', calculate);
        num2.addEventListener('input', calculate);
        method.addEventListener('change', calculate);
    });
</script>