 <?php
       include_once '../connection.php';  

class Blog {

    public $id;
    public $genre;
    public $userid;
    public $title;
    public $text;
    public $img;
    public $video;
    public $status;
    public $date;
    public $commentno;

    public function __construct($id, $genre, $userid, $title, $text, $img, $video, $status, $date, $commentno) {
        $this->id = $id;
        $this->genre = $genre;
        $this->userid = $userid;
        $this->title = $title;
        $this->text = $text;
        $this->img = $img;
        $this->video = $video;
        $this->status = $status;
        $this->date = $date;
        $this->commentno = $commentno;
    }
    
    

    //FUNCTION TO GET ALL INFO FROM BLOG TABLE AND STORE AS AN ARRAY
//    public static function all() {
//        $list = [];
//        $db = Db::getInstance();
//        $req = $db->query('SELECT * FROM blog_posts');
//        // we create a list of Product objects from the database results
//        foreach ($req->fetchAll() as $blog) {
//            $list[] = new Blog(
//                    $blog['id'], $blog['genre'], $blog['userid'], $blog['title'], $blog['text'], $blog['img'], $blog['video'], $blog['status'], $blog['date'], $blog['commentno']);
//        }
//        return $list;
//    }

    //FUNCTION TO RETRIEVE A BLOG POST
    public static function find($id) {
      
        $db = Db::getInstance();
      
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM blog_posts WHERE blog_ID = :id');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $blog = $req->fetch();
        return $blog;
    }

    
   
    
    
    
    
    
    
    
    
    
//    //FUNCTION TO UPDATE / EDIT BLOG POSTS
//    public static function update($id) {
//        $db = Db::getInstance();
//        $req = $db->prepare("Update blog_posts set "
//                . "genre_TAG=:genre "
//                . "user_ID=:userid "
//                . "blog_TITLE=:title "
//                . "blog_TEXT=:text "
//                . "blog_IMG=:img "
//                . "blog_VIDEO=:video "
//                . "blog_STATUS=:status "
//                . "date_PUB=:date "
//                . "comm_COUNT=:commentno "
//                . "where blog_ID=:id");
//        
//        $req->bindParam(':id', $id);
//        $req->bindParam(':genre', $genre);
//        $req->bindParam(':userid', $userid);
//        $req->bindParam(':title', $title);
//        $req->bindParam(':text', $text);
//        $req->bindParam(':img', $img);
//        $req->bindParam(':video', $video);
//        $req->bindParam(':status', $status);
//        $req->bindParam(':date', $date);
//        $req->bindParam(':commentno', $commentno);
//
//// set name and price parameters and execute
//        if (isset($_POST['name']) && $_POST['name'] != "") {
//            $filteredName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
//        }
//        if (isset($_POST['price']) && $_POST['price'] != "") {
//            $filteredPrice = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_SPECIAL_CHARS);
//        }
//        $name = $filteredName;
//        $price = $filteredPrice;
//        $req->execute();
//
////upload product image if it exists
//        if (!empty($_FILES[self::InputKey]['name'])) {
//            Product::uploadFile($name);
//        }
//    }
//    
//    
//
////FUNCTION TO CREATE A BLOG POST
//    public static function add() {
//        $db = Db::getInstance();
//        $req = $db->prepare("Insert into blog_posts(name, price) values (:name, :price)");
//        $req->bindParam(':name', $name);
//        $req->bindParam(':price', $price);
//
//// set parameters and execute
//        if (isset($_POST['name']) && $_POST['name'] != "") {
//            $filteredName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
//        }
//        if (isset($_POST['price']) && $_POST['price'] != "") {
//            $filteredPrice = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_SPECIAL_CHARS);
//        }
//        $name = $filteredName;
//        $price = $filteredPrice;
//        $req->execute();
//
////upload product image
//        Product::uploadFile($name);
//    }
//
//    const AllowedTypes = ['image/jpeg', 'image/jpg'];
//    const InputKey = 'myUploader';
//
////die() function calls replaced with trigger_error() calls
////replace with structured exception handling
//    public static function uploadFile(string $name) {
//
//        if (empty($_FILES[self::InputKey])) {
//            //die("File Missing!");
//            trigger_error("File Missing!");
//        }
//
//        if ($_FILES[self::InputKey]['error'] > 0) {
//            trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
//        }
//
//
//        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
//            trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
//        }
//
//        $tempFile = $_FILES[self::InputKey]['tmp_name'];
//        $path = "C:/xampp/htdocs/MVC_Skeleton/views/images/";
//        $destinationFile = $path . $name . '.jpeg';
//
//        if (!move_uploaded_file($tempFile, $destinationFile)) {
//            trigger_error("Handle Error");
//        }
//
//        //Clean up the temp file
//        if (file_exists($tempFile)) {
//            unlink($tempFile);
//        }
//    }
//
//    //FUNCTION TO DELETE BLOG POSTS
//    public static function remove($id) {
//        $db = Db::getInstance();
//        //make sure $id is an integer
//        $id = intval($id);
//        $req = $db->prepare('delete FROM blog_posts WHERE blog_ID = :id');
//        // the query was prepared, now replace :id with the actual $id value
//        $req->execute(array('id' => $id));
//    }
//
}

?><?php

