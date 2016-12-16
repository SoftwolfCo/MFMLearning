<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('MFM Learning');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('no-reply@mfmlearning.cf');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost:3306',
                      /*username*/'root',
                      /*password*/'',
                      /*database name*/'mfm_learning',
                      /*table name*/'user');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('4Ke7WJBRRepR1l0');

?>