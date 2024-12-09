<h3>Try catch</h3>

<?php
try {
    $x = 10 / 'Hello';
}  catch (DivisionByZeroError $e) {
    echo 'เกิดข้อผิดพลาด ไม่สามารถหารด้วยศูนย์ได้';
} catch (Throwable $e) {
    echo 'มึงอ่านหนังสือบ่ออกติเขาให้ใส่รหัสผ่านบักควย ' .$e->getMessage();
}
echo '<br />';
?>