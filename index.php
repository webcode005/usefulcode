basantwebcode@gmail.com

### Delete Image inside uploaded folder

$id=$_GET['id'];
$file=$_GET['filename'];
// folder path to delete all files
$path = "course/banner";
 
// list of css file names located inside the folder
$files = glob($path.'/'.$file);

// delete all the files from the list 
foreach($files as $file){
 if(is_file($file)){
 unlink($file);
 }
}



 #### SEO Freindly URL


      function clean($title) {
       $string = str_replace(' ', '-', $title); // Replaces all spaces with hyphens.
       $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    
       return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
        }
    
     // $slug=strtolower(clean($title));

        function catclean($cat) {
       $strings = str_replace(' ', '', $cat); // Replaces all spaces with hyphens.
       $strings = preg_replace('/[^A-Za-z0-9\-]/', '', $strings); // Removes special chars.
    
       return preg_replace('/-+/', '-', $strings); // Replaces multiple hyphens with single one.
        }


#### SEO Freindly Way 2

$z="ABCavb%&*@#('--__  ";

function clean($z) {
   $string = str_replace(' ', '-', $z); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}

echo $g=strtolower(clean($z));



#### REST API

        <?php
        $url="https://www.blog.mindcypress.com/wp-json/wp/v2/posts?_embed&per_page=4";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        $posts = json_decode($result, true);
        $i='0';
        foreach ($posts as $post) { 

        //     echo '<pre>';
        //   print_r($post);
        // echo '</pre>';

          ?>
                 <div class="col-md-3">
                    

                    <div class="aos-init aos-animate" data-aos="fade-up">
                        <div class="blog">
                            <div class="thumbnail">
                                
                                <a href="<?php echo $post['link']; ?>" class="image"><img src="<?php echo $posts[$i]["_embedded"]["wp:featuredmedia"][0]["media_details"]["sizes"]["medium"]["source_url"]; ?>" alt="<?php echo $posts[0]["_embedded"]["wp:featuredmedia"][0]['alt_text']; ?>"></a>
                            </div>
                            <div class="info">
                                <!-- <a href="#" class="category">Gym Coaching</a> -->
                                <h3 class="title"><a href="<?php echo $post['link']; ?>"><?php echo $post['title']['rendered']; ?></a></h3>
                                
                                 <ul class="meta">
                                    <li>   
                                        <div class="testimonial-rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-comments" style="color: #009933;"></i> <?= (rand(10,3000));?></li>
                                    <li><i class="far fa-calendar" style="color: #009933;"></i> <?php echo date('d M Y', strtotime($post['date'])); ?></li>
                                    
                                </ul>

                            </div>
                        </div>
                    </div>


                </div>

         <?php $i++;} ?>    



#### Find Difference Between Two Dates


 date_default_timezone_set('Asia/Kolkata');
$today=date('Y-m-d');
$today='2021-07-10';
$origin = new DateTime($today);
$target = new DateTime('July 10,2021');
$interval = $origin->diff($target);
echo $interval=$interval->format('%a days');
if($interval=='0 days')
{
    echo "expired";
}
else
{
    echo" Have Fun";
}


// for find date differnce in php
?>

<?php 

     echo $wdate=$webinar_master_row['date'];
     echo"<br>";
        

date_default_timezone_set('Asia/Kolkata');
$today=date('Y-m-d');

$origin = new DateTime($today);
$target = new DateTime($wdate);
$interval = $origin->diff($target);
$interval=$interval->format('%R%a');
if($interval<='0')
{
    echo "expired".$interval;
}
else
{
    echo" Have Fun".$interval;
}




?>   
 

 ### add multiple checkbox,radio,option values

   $cat_id=$_POST['cat_id'];

     $checkbox1=$_POST['cat_id'];  
      $cat_id="";  
      foreach($checkbox1 as $chk1)  
         {  
            $cat_id .= $chk1.",";  
         } 





##### How to generate a random, unique, alphanumeric string in PHP  

$length = 10;
$used_symbols = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
 
$r1= substr(str_shuffle($used_symbols), 0, $length);

$r2= substr(str_shuffle($used_symbols), 0, 8);

$r=$r1.$r2;



substr("Hello world",6,-2);



***** SQL *****

### How to Delete Duplicate Rows in SQL?

DELETE FROM  vegetables  WHERE  VEGETABLE_ID NOT IN (  SELECT  MIN(VEGETABLE_ID) FROM  vegetables  GROUP BY  VEGETABLE_NAME,  color );  



### Delete record with alertbox
   $query=$conn->query("DELETE FROM `wp_blog` WHERE ID='$id'");  
   echo "<script>alert('Post Deleted');window.location='post.php'</script>";

 

###  Use Array to get product details and use these array where you want

$st=$conn->query("SELECT * FROM `tl_price` WHERE `type`='classroom' and `prod_id`='$p_id'  ORDER BY `id` DESC");
         $st_array=array();
         
         
            while($srt=$st->fetch_assoc())
            {
                $st_array[]=$srt;
            } 


#### Use One query to get record in another way

$userArr=mysqli_fetch_assoc(mysqli_query($con,"select * from users where id='$user_id'"));
echo $userArr['fname'];


####


$price_row=mysqli_fetch_assoc(mysqli_query($conn,"select tl_price.*,tl_product.title from tl_price,tl_product where tl_product.detail_id=tl_price.prod_id AND tl_price.id='$pid'"));
$price=$price_row['p_price'];
 $title=$price_row['title'];


***** how to find duplicacy in sql

select empid from table group by empid having count(empid) > 1



CREATE TABLE `admins` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` enum('all','manage_posts') NOT NULL
);
 
CREATE TABLE `posts` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `title` text NOT NULL,
  `created_by` int(11) NOT NULL,
  CONSTRAINT `fk_created_by_posts` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
);






5. ci5_crud & Laravel Crud (PHP Tech Life)


8. Upload Project on Git (Partial Done)
9. adobe xd & Photoshop
10. Django (website)



Let’s Start to send JSON data via POSt Request with PHP cURL:
In the following example code, i will show you HTTP POST request and send JSON data to URL with cURL function.

Step-1: First we will specify URL ($url) where the JSON data need to be send.
Step-2: Initiate cURL resource using curl_init().
step-3: encode PHP array data into aJSON string using json_encode().
step-4: Attach JSON data to the POSt field using the CURLOPT_POSTFIELDS option.
step-5: set header option to Content-Type: application/json
step-6: Return response as string CURL_RETURNTRANSFER option
Step-7: Finally curl_exec() function is used to execute the POST request api url.

 index.php
         

         
         select tl_price.*,tl_product.title,tl_product.video from tl_price,tl_product where tl_product.detail_id=tl_price.prod_id AND tl_price.prod_id='38' AND tl_price.s_location='Kuwait' AND tl_price.type='Classroom' 




select tl_price.*,tl_product.title,tl_product.video,short_description.product_id,short_description.pointer from tl_price,tl_product,short_description where tl_product.detail_id=tl_price.prod_id AND tl_price.prod_id='38' AND tl_price.s_location='Kuwait' AND tl_price.type='Classroom' AND short_description.product_id='38'




pcc=$conn->query("select * from category where url_key='$purl'");
$pccrow=$pcc->fetch_assoc();
  $catid=$pccrow['id'];
$pscc=$conn->query("select * from sub_category where url_key='$surl'");
$pscrow=$pscc->fetch_assoc();
   $scatid=$pscrow['id'];


?>
 <?php 
            
            $a=$conn->query("SELECT * FROM `product` WHERE `category_id`='$catid' AND `sub_category_id`='$scatid'");


     SELECT category.*,sub_category.*,product.* FROM category,sub_category,product WHERE product.category_id=category.id AND product.sub_category_id=sub_category.id  AND  category.url_key='partner' AND sub_category.url_key='why-partner-with-us'  

<?php 

        // Declare two dates
        $start_date = strtotime("12:30");
        $end_date = strtotime("1:30");
          
        // Get the difference and divide into 
        // total no. seconds 60/60/24 to get 
        // number of days
        //echo "Difference between two dates: ". ($end_date - $start_date)/60/60;
    
    ?>

                


***** Print Date,Days of any month in a year  *****

### Step1: 
date_default_timezone_set('Asia/Kolkata');
$month = date('m');
$year = date('Y');
$cur_date = date('Y-m-d');

$d = $day_count =cal_days_in_month(CAL_GREGORIAN,$month,$year);

### Step2:

    <?php
        $day = 1;
        while($d){ ?>

                    <th><?php echo $dated = ($day++.' '.(date("M Y")));echo '<br>('.$day_name = date('D', strtotime($dated)).')';?></th>
                        
    <?php  $d--; } ?> 





boozetJvQR
Pssw0rd@5211




**** how to show only 50 words in php *****

$in="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi purus nisl, blandit et eros id, pharetra tristique massa. Nulla facilisi. Curabitur lobortis urna eu neque congue, id cursus purus placerat. In malesuada est tellus. Nunc ac ullamcorper nibh. Maecenas lacus dolor, volutpat sed augue sit amet, maximus condimentum sem. Aenean nec egestas orci. Sed fringilla augue eget arcu consectetur interdum. Praesent sed dignissim risus. Ut lobortis dolor nec sagittis dapibus. Donec eget dolor vitae elit porta commodo in et magna. Nunc sapien nisl, euismod ac ex vitae, sodales feugiat lorem. Phasellus condimentum, nulla cursus porta mollis, nulla urna dapibus velit, vitae sagittis arcu risus vitae orci. Praesent leo nisi, laoreet id mauris nec, hendrerit feugiat lacus. Praesent vulputate lorem vel lobortis aliquam.";

Method:1
<?= $out = strlen($in) > 50 ? substr($in,0,50)."..." : $in;?>

Method:2
$result = substr($in, 0, 50); //first 50 chars "Pellentesque"



##### How to Get Checked Checkboxes Value using jQuery

 <input type="checkbox" value="1"  onclick="myFunction()"  id="cwebsite" class="form-control" name="cwebsite" >
 <img src="" id="cwimg">
 <script>

function myFunction() {
  var checkBox = document.getElementById("cwebsite");
 
  var text = document.getElementById("cwimg");
  
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}

 </script>

Murari!@12

 ***** PHP *****
1. OOPS Concept
2. REST API
3. ANY CMS
4. ANY Framework
5. Core PHP (ARRAY & STRINGS)
6. LAMP
7. OpenCart

Technical suneja



**** How to check Error in PHP file inside folder *****
<?php 

exex("php -1 about.php", $output, $return);


if($return==0)
{
   include('about.php') ;
}
else

{

    if(!isset($output[2]))
    {
        echo $output[0];
    }
    else
    {
        echo $output[2];
    }
    
}



?>



#### undefined offset: 0 laravel

use count method 
and check if count > 0 then fetch data from database or else pass blank value






##### 9 Useful MySQL Date Related Query

Get Last one week,one month ,one year records from Database Date Field
Get Last one week records

SELECT * FROM table WHERE Date BETWEEN (NOW() - INTERVAL 7 DAY) AND NOW()
Get Last one month records

SELECT * FROM table WHERE YEAR(date_created) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(date_created) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)
Get Last 30 days records

SELECT * FROM table WHERE Date BETWEEN (NOW() - INTERVAL 1 MONTH) AND NOW()
Get Last one year records

SELECT * FROM table WHERE Date BETWEEN (NOW() - INTERVAL 1 YEAR) AND NOW()
Select records from today, this week, this month, this year from Database Date Field
Select records from today

$processdate = DATE('Y-m-d');
SELECT SUM(amount) AS totalfundreceive FROM `table` WHERE DATE(`processdate`)='$processdate'
Select records from this week

SELECT * FROM table WHERE processdate > DATE_SUB(NOW(), INTERVAL 1 WEEK);
Select records from this month/ Current month

SELECT * FROM table WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE());
Select records from this year/ current year

SELECT * FROM TABLE WHERE YEAR(date) = YEAR(CURDATE()); 
Records of two date ranges

SELECT * FROM TABLE WHERE date between '2019-01-07' AND '2019-01-15'


#### Curl GET And POST Method Calls – PHP Example

curl is an open source command line tool and library for transferring data with URL.
curl is a powerful system to transfer data to many protocals. it is a good way to send data between websites.
cURL is unrestricted so it can be make simple HTTP Request ,also make complex FTP upload with an authentication, also can make HTTPS requests.

Steps to make CURL calls :
Step1:
We will initialize the curl by calling curl_init() function. After this initation we can call curl resources functions.

Step2:
There are many setting that we can use for different works with curl_setopt() function.

Ex : bool curl_setopt ( $curl_object , $option , mixed $value );

First parameter $curl_object
A cURL handle returned by curl_init().

Second parameter is setting $option
The CURLOPT_XXX option to set.

Third  parameter is $value
The value to be set on option. ex. array or any value

Below are the some main settings we can use inside curl_setopt() function
A. CURLOPT_RETURNTRANSFER – Set it TRUE to return the response as a string, if not set this parameter then response will outputting on page then we can use file_get_contents(‘url’) to get response. 
Ex. curl_setopt($curl_object, CURLOPT_RETURNTRANSFER, true);

B. CURLOPT_CONNECTTIMEOUT – Number of seconds to try to connect 
Ex. curl_setopt($curl_object, CURLOPT_CONNECTTIMEOUT, 60);

C. CURLOPT_URL – URL to sent curl request.
Ex. curl_setopt($curl_object, CURLOPT_URL, “http://www.curlexample.com”);

D. CURLOPT_POST – Set when sending curl post request. 
Ex. curl_setopt($curl_object, CURLOPT_POST, true);

E. CURLOPT_POSTFIELDS – Array of data sent in post.
Ex. curl_setopt($curl_object, CURLOPT_POST, array(“querystring1” => “parameter1”, “querystring2” => “parameter1”)); F.CURLOPT_TIMEOUT – Number of seconds cURL will take to execute.
Ex. curl_setopt($curl_object, CURLOPT_TIMEOUT, 60);

G. CURLOPT_FRESH_CONNECT – Each curl call be refresh. 
Ex. curl_setopt($curl_object, CURLOPT_TIMEOUT, true);

H. CURLOPT_USERPWD – Some pages/api required authentication to access, for these cases we will use this setting. 
Ex. curl_setopt($crl, CURLOPT_USERPWD, “Username:Password”);

Step3:
curl_exec() call will execute for curl settings and return response.

Step4:
curl_close() will call to free all curl resources.

 

==> MAKE GET METHOD REQUEST
Making a GET method call by curl.

<?php
                  $url = 'https://curlbasics.com?curl=basic&method=get';
                  $crl = curl_init();
                  
                  curl_setopt($crl, CURLOPT_URL, $url);
                  curl_setopt($crl, CURLOPT_FRESH_CONNECT, true);
                  curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
                  $response = curl_exec($crl);
                  
                  if(!response){
                      die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
                  }
                  curl_close($crl);
?>
==> MAKE POST METHOD REQUEST
Making a POST method call by curl.

<?php 
  
    $data = array(
          'query1' => 'parameter1 ',
          'text' => 'Hi, Message from android example'
       );
        $url = "https://curl-post-call.com";
       
       $ch = curl_init ($url);
       curl_setopt ($ch, CURLOPT_POST, true);
       curl_setopt ($ch, CURLOPT_POSTFIELDS, $data);
       curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
       $response = curl_exec ($ch); 
       
       if(!response){
               die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
           }
       curl_close($crl);
               
  ?>        
 

==> MAKE POST METHOD REQUEST WHERE AUTHENTICATION REQUIRED
Making a POST method call by curl.

<?php 
  
           $AUTH_USERNAME = "Username";
           $AUTH_PASSWORD = "Password";
           
           $url = 'https://authenticated-curl-call.com/';
           $data = array("src" => "source",  "text" => "test curl request");
           
           $ch=curl_init($url);
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
           curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
           
           curl_setopt($ch, CURLOPT_USERPWD, $AUTH_USERNAME . ":" . $AUTH_PASSWORD);
           
           $response = curl_exec( $ch );
           if(!response){
               die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
           }
           curl_close($ch);
               
  ?>    
      
 

==> MAKE POST METHOD REQUEST WHERE AUTHENTICATION REQUIRED POST REQUEST AS JSON
Making a POST method json call by curl.

<?php 
   
            $AUTH_USERNAME = "Username";
            $AUTH_PASSWORD = "Password";
            
            $url = 'https://curl-json-call.com/';
            $data = array("src" => "source",  "text" => "test curl request");
            
            $data_string = json_encode($data);
            
            $ch=curl_init($url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($ch, CURLOPT_USERPWD, $AUTH_USERNAME . ":" . $AUTH_PASSWORD);
            
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                        
            $response = curl_exec( $ch );
            if(!response){
                die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
            }
            
            curl_close($ch);
                
   ?>         
       
 

 
 <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6130cd14eae16400120a4fcb&product=inline-share-buttons" async="async"></script>



 #### Share Social URL

 Facebook:
Facebook social share URL:

https://www.facebook.com/sharer.php?u=[post-url]

Twitter:
Twitter social share URL:

https://twitter.com/share?url=[post-url]&text=[post-title]&via=[via]&hashtags=[hashtags]

Google+:
Google+ social share URL:

https://plus.google.com/share?url=[post-url]

Pinterest:
Pinterest social share URL:

https://pinterest.com/pin/create/bookmarklet/?media=[post-img]&url=[post-url]&is_video=[is_video]&description=[post-title]

LinkedIn:
LinkedIn social share URL:

https://www.linkedin.com/shareArticle?url=[post-url]&title=[post-title]

Whatsapp
Whatsapp social share URL:

https://wa.me/whatsappphonenumber/?text=urlencodedtext

Instagram:

// 

Instagram currently doesn’t allow you to share a photo or video from another website – you can only upload photos/videos directly from your mobile device. Since there is no sharing mechanism, there is no way for us to include a button that will share your content to Instagram.