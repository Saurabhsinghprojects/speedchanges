<?php
//include('mail/sendmail.php');
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$formno = $_POST['formno'];
$adminemail="casestudy@perceptive-analytics.com";

ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", $adminemail);

if($name!='' && $email!='' && $formno!='')
{
if($formno==3)
{
$fileurl='https://www.perceptive-analytics.com/wp-content/uploads/2015/03/Marketing-Mix-Modeling.pdf';
$fileurl_name = pathinfo($fileurl);
$esubject = "Perceptive Analytics-Marketing Mix Modeling";
$emailtext = "<p>Hi ".$name.",</p>

I'm Chaitanya Sagar, the founder & CEO of Perceptive Analytics.

<p>As promised, here's your preferred case study: Marketing Mix Modeling</p>

Click to download: <a href='".$fileurl."'>Marketing Mix Modeling Case</a>

<p>Every month or so I'll send you couple of our best works that might help you make smarter decisions.</p>

Stay tuned!

<p>Cheers,</p>
Chaitanya Sagar, CEO,
cs@perceptive-analytics.com

<p>https://www.perceptive-analytics.com</p>
A Trusted Analytics Partner

<p>P.S. I always look forward to sharing ideas. If you would like to discuss your current priorities / projects and bounce off ideas with me, just reply to this email and we can book a free consultation slot this week.</p>

I believe in sending very limited (no more than one a month), qualitative, relevant emails to clients, acquaintances, other important persons. If you would like to not receive this email, just reply 'Unsubscribe' to this e-mail.

<p>Our mailing address is:</p>
Perceptive Analytics, 353 W 48th St, New York, NY 10036";
}
if($formno==2)
{
$fileurl='http://www.perceptive-analytics.com/wp-content/uploads/2015/02/Markdown-Optimization-1.7.pdf';
$fileurl_name = pathinfo($fileurl);
$esubject = "Perceptive Analytics - Markdown Optimization";
$emailtext = "<p>Hi ".$name.",</p>

I'm Chaitanya Sagar, the founder & CEO of Perceptive Analytics.

<p>As promised, here's your preferred case study: Markdown Optimization</p>

Click to download: <a href='".$fileurl."'>Markdown Optimization Case Study</a>

<p>Every month or so I'll send you couple of our best works that might help you make smarter decisions.</p>

Stay tuned!

<p>Cheers,</p>
Chaitanya Sagar, CEO,
cs@perceptive-analytics.com

<p>https://www.perceptive-analytics.com</p>
A Trusted Analytics Partner

<p>P.S. I always look forward to sharing ideas. If you would like to discuss your current priorities / projects and bounce off ideas with me, just reply to this email and we can book a free consultation slot this week.</p>

I believe in sending very limited (no more than one a month), qualitative, relevant emails to clients, acquaintances, other important persons. If you would like to not receive this email, just reply 'Unsubscribe' to this e-mail.

<p>Our mailing address is:</p>
Perceptive Analytics, 353 W 48th St, New York, NY 10036";
}
if($formno==4)
{
$fileurl='https://www.perceptive-analytics.com/wp-content/uploads/2019/12/Churn-Case-Study-Ver-1.0.pdf';
$fileurl_name = pathinfo($fileurl);
$esubject = "Perceptive Analytics - Churn Analytics";
$emailtext = "<p>Hi ".$name.",</p>

I'm Chaitanya Sagar, the founder & CEO of Perceptive Analytics.

<p>As promised, here's your preferred case study: Churn Modeling</p>

Click to download: <a href='".$fileurl."'>Churn Modeling Case</a>

<p>Every month or so I'll send you couple of our best works that might help you make smarter decisions.</p>

Stay tuned!

<p>Cheers,</p>
Chaitanya Sagar, CEO,
cs@perceptive-analytics.com

<p>https://www.perceptive-analytics.com</p>
A Trusted Analytics Partner

<p>P.S. I always look forward to sharing ideas. If you would like to discuss your current priorities / projects and bounce off ideas with me, just reply to this email and we can book a free consultation slot this week.</p>

I believe in sending very limited (no more than one a month), qualitative, relevant emails to clients, acquaintances, other important persons. If you would like to not receive this email, just reply 'Unsubscribe' to this e-mail.

<p>Our mailing address is:</p>
Perceptive Analytics, 353 W 48th St, New York, NY 10036";
}
if($formno==5){$fileurl='https://www.perceptive-analytics.com/wp-content/uploads/2020/09/Digital-Marketing-Attribution-V-1.2.pdf';
$fileurl_name = pathinfo($fileurl);
$esubject = "Perceptive Analytics - Attribution Modeling";
$emailtext = "<p>Hi ".$name.",
</p>
I'm Chaitanya Sagar, the founder & CEO of Perceptive Analytics.
<p>As promised, here's your preferred case study: Attribution Modeling</p>Click to download: <a href='".$fileurl."'>Attribution Modeling</a>

<p>Every month or so I'll send you couple of our best works that might help you make smarter decisions.</p>

Stay tuned!

<p>Cheers,</p>
Chaitanya Sagar, 
CEO,cs@perceptive-analytics.com
<p>https://www.perceptive-analytics.com</p>
A Trusted Analytics Partner

<p>P.S. I always look forward to sharing ideas. If you would like to discuss your current priorities / projects and bounce off ideas with me, just reply to this email and we can book a free consultation slot this week.</p>

I believe in sending very limited (no more than one a month), qualitative, relevant emails to clients, acquaintances, other important persons. If you would like to not receive this email, just reply 'Unsubscribe' to this e-mail.

<p>Our mailing address is:</p>
Perceptive Analytics, 353 W 48th St, New York, NY 10036";
}


if($formno==6){$fileurl='http://www.perceptive-analytics.com/wp-content/uploads/2015/03/Marketing-Mix-Modeling.pdf';$fileurl_name = pathinfo($fileurl);$esubject = "Perceptive Analytics - Attribution Modeling";$emailtext = "<p>Hi ".$name.",</p>I'm Chaitanya Sagar, the founder & CEO of Perceptive Analytics.<p>As promised, here's your preferred case study: Attribution Modeling</p>Click to download: <a href='".$fileurl."'>Download Link</a><p>Every month or so I'll send you couple of our best works that might help you make smarter decisions.</p>Stay tuned!<p>Cheers,</p>Chaitanya Sagar, CEO,cs@perceptive-analytics.com<p>www.perceptive-analytics.com</p>A Trusted Analytics Partner for Fortune 500 companies<p>P.S. I always look forward to sharing ideas. If you would like to discuss your current priorities / projects and bounce off ideas with me, just reply to this email and we can book a free consultation slot this week.</p>I believe in sending very limited (no more than one a month), qualitative, relevant emails to clients, acquaintances, other important persons. If you would like to not receive this email, just reply 'Unsubscribe' to this e-mail.<p>Our mailing address is:</p>Perceptive Analytics, 353 W 48th St, New York, NY 10036";}
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= "From: Perceptive Analytics <$adminemail>" . "\r\n";
$header .= "Reply-To: $adminemail";
$userMail=mail($email, $esubject, $emailtext, $header);
echo $userMail;
 
$esubjectadmin="Perceptive Analytics - Admin email";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: Perceptive Analytics <$adminemail>" . "\r\n";
$headers .= "Reply-To: $adminemail";


$emailtextadmin="<p>Name: ".$name  ." </p>
<p>Email: ".$email."</p>
<p>Phone: ".$phone."</p> 
<p>File: ".$fileurl."</p> 
<p>Form number: ".$formno."</p>";
$adminMail=mail('cs@p2w2.com', $esubjectadmin, $emailtextadmin, $headers);
echo $adminMail;
}
else
echo 'Error';
?>

<script>
var a = $("<a>");
a.attr("href", "<?php echo $fileurl; ?>").attr("download", "<?php echo $fileurl_name['basename'] ?>").appendTo("body");
a[0].click();    
a.remove();
</script>