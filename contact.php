     <?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

if (
    empty($name) ||
    empty($email) ||
    empty($subject) ||
    empty($message)
) {
    exit("Please fill in all fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Please enter a valid email address.");
}

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$subject = htmlspecialchars($subject);
$message = htmlspecialchars($message);


    $mail = new PHPMailer(true);

    try {

        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'diptisurve7415@gmail.com';
        $mail->Password   = 'sgsfxntphfyfvkdu';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender & Receiver
        $mail->setFrom('diptisurve7415@gmail.com', "Dipti's Portfolio Website");
        $mail->addAddress('diptiisurve@gmail.com');

        // Reply To
        $mail->addReplyTo($email, $name);

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = $subject;

        $mail->Body = '
            <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body style="margin:0;background:#eef2f7;padding:40px;font-family:Arial,Helvetica,sans-serif;">

<div style="
    max-width:700px;
    margin:auto;
    background:#ffffff;
    border-radius:16px;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
">

    <div style="
        background:#0f172a;
        color:#ffffff;
        padding:35px;
        text-align:center;
    ">
        <h1 style="margin:0;font-size:30px;">
            New Contact Message
        </h1>

        <p style="margin-top:12px;color:#cbd5e1;">
            Someone has contacted you through your portfolio website.
        </p>
    </div>

    <div style="padding:35px;">

        <div style="margin-bottom:20px;">
            <strong style="display:block;color:#64748b;margin-bottom:6px;">Name</strong>

            <div style="
                background:#f8fafc;
                padding:14px 18px;
                border-radius:10px;
            ">
                '.htmlspecialchars($name).'
            </div>
        </div>

        <div style="margin-bottom:20px;">
            <strong style="display:block;color:#64748b;margin-bottom:6px;">Email</strong>

            <div style="
                background:#f8fafc;
                padding:14px 18px;
                border-radius:10px;
            ">
                <a href="mailto:'.htmlspecialchars($email).'"
                   style="color:#2563eb;text-decoration:none;">
                    '.htmlspecialchars($email).'
                </a>
            </div>
        </div>

        <div style="margin-bottom:20px;">
            <strong style="display:block;color:#64748b;margin-bottom:6px;">Subject</strong>

            <div style="
                background:#f8fafc;
                padding:14px 18px;
                border-radius:10px;
            ">
                '.htmlspecialchars($subject).'
            </div>
        </div>

        <div>
            <strong style="display:block;color:#64748b;margin-bottom:6px;">Message</strong>

            <div style="
                background:#f8fafc;
                border-left:5px solid #2563eb;
                padding:20px;
                border-radius:10px;
                line-height:1.8;
                color:#374151;
                white-space:pre-wrap;
            ">
                '.nl2br(htmlspecialchars($message)).'
            </div>
        </div>

    </div>

    <div style="
        background:#f8fafc;
        padding:20px;
        text-align:center;
        color:#94a3b8;
        font-size:13px;
    ">
        Portfolio Contact Form • '.date("Y").'
    </div>

</div>

</body>
</html>
        ';

        $mail->send();

        header('Content-Type: application/json');

echo json_encode([
    "status" => "success",
    "message" => "Thank you! Your message has been submitted successfully. I'll get back to you as soon as possible."
]);
exit;

    } catch (Exception $e) {
        header('Content-Type: application/json');

echo json_encode([
    "status" => "error",
    "message" => "Something went wrong. Please try again."
]);

exit;
    }
}
?>