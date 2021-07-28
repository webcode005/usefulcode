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

   $query=$conn->query("DELETE FROM `wp_blog` WHERE ID='$id'");  
   echo "<script>alert('Post Deleted');window.location='post.php'</script>";

 

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

 

 ### add multiple checkbox,radio,option values

   $cat_id=$_POST['cat_id'];

     $checkbox1=$_POST['cat_id'];  
      $cat_id="";  
      foreach($checkbox1 as $chk1)  
         {  
            $cat_id .= $chk1.",";  
         } 


####
$z="ABCavb%&*@#('--__  ";

function clean($z) {
   $string = str_replace(' ', '-', $z); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}

echo $g=strtolower(clean($z));


##### How to generate a random, unique, alphanumeric string in PHP  
$length = 10;
$used_symbols = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
 
$r1= substr(str_shuffle($used_symbols), 0, $length);

$r2= substr(str_shuffle($used_symbols), 0, 8);

$redirect=$r1.$r2;



substr("Hello world",6,-2);



***** how to find duplicacy in sql

select empid from table group by empid having count(empid) > 1




Managing <DateTime-local> input type with max min and default value
datetime-local input uses RFC 3339 format for input and output.
User input of date and time can be collected by using this input type.
We will develop sample codes to collect the data and how to set the default values along with data for max , min attributes.


12-06-2018 19:30
 Source code is here .
<input type='datetime-local' id='input_time' name='input_time' value='2018-06-12T19:30' min='2018-06-07T00:00' max='2018-06-14T00:00'>
Adding Seconds
By adding step=1 we can include seconds selection in our input. 
12-06-2018 19:30:46
<input type='datetime-local' id='input_time' name='input_time' value='2018-06-12T19:30:46' min='2018-06-07T00:00:56' max='2018-06-14T00:00:34' step=1>
Creating the date and time object using datetime-local as input
As we receive the input as POST ( or GET ) method, the PHP code part is here to create the date and time object.
//$dt=$_POST['dt']; // Getting data from POST method of form
$dt="2019-02-16T16:56:49";
$date = DateTime::createFromFormat('Y-m-d\TH:i:s', $dt);
if($date){$msg=' Date object is created using the input ';}
else{$msg=' Unable to create date object ';}
echo $msg;



1. add yt in ckeditor
2. move all old post (Done)
3. write ajax code (Done)

5. ci5_crud & Laravel Crud (PHP Tech Life)
6. use owl carousel for related product section
7. fixed layout of course image according to devices
8. Upload Project on Git (Partial Done)
9. adobe xd & Photoshop
10. Django (website)

SELECT * FROM `wp_blog` WHERE `post_type`='post' AND `post_status`='Publish' ORDER BY `ID` DESC


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
         