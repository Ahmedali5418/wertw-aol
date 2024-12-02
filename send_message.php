<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال البيانات من النموذج
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // إعدادات البريد
    $to = "ahmedalialosali@gmail.coms"; // ضع بريدك الإلكتروني هنا
    $subject = "رسالة جديدة من موقعك";
    $body = "اسم: $name\n";
    $body .= "البريد الإلكتروني: $email\n\n";
    $body .= "الرسالة:\n$message\n";

    $headers = "From: $email";

    // إرسال البريد
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('تم إرسال الرسالة بنجاح!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('حدث خطأ أثناء إرسال الرسالة. حاول مرة أخرى لاحقًا.'); window.location.href='contact.html';</script>";
    }
} else {
    echo "<script>alert('طلب غير صالح.'); window.location.href='contact.html';</script>";
}
?>