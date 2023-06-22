<?php
//include('mail/sendmail.php');
$email = $_POST['email'];
$name = $_POST['name'];
$formno = $_POST['formno'];
$adminemail="casestudy@perceptive-analytics.com";

ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", $adminemail);

if($name!='' && $email!='' && $formno!='')
{
if($formno==1)
{
$fileurl='http://www.perceptive-analytics.com/wp-content/uploads/2016/08/AdWords-Spend-Optimizer.pdf';
$fileurl_name = pathinfo($fileurl);
$esubject = "Perceptive Analytics - Adwords Spend Optimization";
$emailtext = "<p>Hi ".$name.",</p>

I'm Chaitanya Sagar, the founder & CEO of Perceptive Analytics.

<p>As promised, here's your preferred case study: Adwords Spend Optimization</p>

Click to download: <a href='".$fileurl."'>Download Link</a>

<p>Every month or so I'll send you couple of our best works that might help you make smarter decisions.</p>

Stay tuned!

<p>Cheers,</p>
Chaitanya Sagar, CEO,
cs@perceptive-analytics.com

<p>www.perceptive-analytics.com</p>
A Trusted Analytics Partner for Fortune 500 companies

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

Click to download: <a href='".$fileurl."'>Download Link</a>

<p>Every month or so I'll send you couple of our best works that might help you make smarter decisions.</p>

Stay tuned!

<p>Cheers,</p>
Chaitanya Sagar, CEO,
cs@perceptive-analytics.com

<p>www.perceptive-analytics.com</p>
A Trusted Analytics Partner for Fortune 500 companies

<p>P.S. I always look forward to sharing ideas. If you would like to discuss your current priorities / projects and bounce off ideas with me, just reply to this email and we can book a free consultation slot this week.</p>

I believe in sending very limited (no more than one a month), qualitative, relevant emails to clients, acquaintances, other important persons. If you would like to not receive this email, just reply 'Unsubscribe' to this e-mail.

<p>Our mailing address is:</p>
Perceptive Analytics, 353 W 48th St, New York, NY 10036";
}
if($formno==3)
{
$fileurl='http://www.perceptive-analytics.com/wp-content/uploads/2015/03/Marketing-Mix-Modeling.pdf';
$fileurl_name = pathinfo($fileurl);
$esubject = "Perceptive Analytics - Marketing Mix Mode";
$emailtext = "<p>Hi ".$name.",</p>

I'm Chaitanya Sagar, the founder & CEO of Perceptive Analytics.

<p>As promised, here's your preferred case study: Marketing Mix Mode</p>

Click to download: <a href='".$fileurl."'>Download Link</a>

<p>Every month or so I'll send you couple of our best works that might help you make smarter decisions.</p>

Stay tuned!

<p>Cheers,</p>
Chaitanya Sagar, CEO,
cs@perceptive-analytics.com

<p>www.perceptive-analytics.com</p>
A Trusted Analytics Partner for Fortune 500 companies

<p>P.S. I always look forward to sharing ideas. If you would like to discuss your current priorities / projects and bounce off ideas with me, just reply to this email and we can book a free consultation slot this week.</p>

I believe in sending very limited (no more than one a month), qualitative, relevant emails to clients, acquaintances, other important persons. If you would like to not receive this email, just reply 'Unsubscribe' to this e-mail.

<p>Our mailing address is:</p>
Perceptive Analytics, 353 W 48th St, New York, NY 10036";
}
if($formno==4){$fileurl='http://www.perceptive-analytics.com/wp-content/uploads/2015/03/Marketing-Mix-Modeling.pdf';$fileurl_name = pathinfo($fileurl);$esubject = "Perceptive Analytics - Predict Customer Churn";$emailtext = "<p>Hi ".$name.",</p>I'm Chaitanya Sagar, the founder & CEO of Perceptive Analytics.<p>As promised, here's your preferred case study: Predict Customer Churn</p>Click to download: <a href='".$fileurl."'>Download Link</a><p>Every month or so I'll send you couple of our best works that might help you make smarter decisions.</p>Stay tuned!<p>Cheers,</p>Chaitanya Sagar, CEO,cs@perceptive-analytics.com<p>www.perceptive-analytics.com</p>A Trusted Analytics Partner for Fortune 500 companies<p>P.S. I always look forward to sharing ideas. If you would like to discuss your current priorities / projects and bounce off ideas with me, just reply to this email and we can book a free consultation slot this week.</p>I believe in sending very limited (no more than one a month), qualitative, relevant emails to clients, acquaintances, other important persons. If you would like to not receive this email, just reply 'Unsubscribe' to this e-mail.<p>Our mailing address is:</p>Perceptive Analytics, 353 W 48th St, New York, NY 10036";}if($formno==5){$fileurl='http://www.perceptive-analytics.com/wp-content/uploads/2015/03/Marketing-Mix-Modeling.pdf';$fileurl_name = pathinfo($fileurl);$esubject = "Perceptive Analytics - Attribution Modeling";$emailtext = "<p>Hi ".$name.",</p>I'm Chaitanya Sagar, the founder & CEO of Perceptive Analytics.<p>As promised, here's your preferred case study: Attribution Modeling</p>Click to download: <a href='".$fileurl."'>Download Link</a><p>Every month or so I'll send you couple of our best works that might help you make smarter decisions.</p>Stay tuned!<p>Cheers,</p>Chaitanya Sagar, CEO,cs@perceptive-analytics.com<p>www.perceptive-analytics.com</p>A Trusted Analytics Partner for Fortune 500 companies<p>P.S. I always look forward to sharing ideas. If you would like to discuss your current priorities / projects and bounce off ideas with me, just reply to this email and we can book a free consultation slot this week.</p>I believe in sending very limited (no more than one a month), qualitative, relevant emails to clients, acquaintances, other important persons. If you would like to not receive this email, just reply 'Unsubscribe' to this e-mail.<p>Our mailing address is:</p>Perceptive Analytics, 353 W 48th St, New York, NY 10036";}
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= "From: Perceptive Analytics <$adminemail>" . "\r\n";
$header .= "Reply-To: $adminemail";
$userMail=mail($email, $esubject, $emailtext, $header);
echo $userMail;
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