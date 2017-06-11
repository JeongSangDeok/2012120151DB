<?php
$sql0 ="CREATE TABLE User
(
    `user_id`        VARCHAR(45)    NOT NULL, 
    `user_pw`        VARCHAR(45)    NOT NULL, 
    `user_name`      VARCHAR(45)    NOT NULL, 
    `user_gender`    VARCHAR(45)    NULL, 
    `user_job`       VARCHAR(45)    NULL, 
    `user_interest`  VARCHAR(45)    NULL, 
    `user_etc`       LONGTEXT       NULL, 
    `is_admin`       INT            NULL, 
    `is_cookie`      INT            NULL, 
    PRIMARY KEY (user_id)
);";

$sql1 ="CREATE TABLE Book
(
    `book_name`       VARCHAR(45)       NOT NULL, 
    `book_type`       VARCHAR(45)       NULL, 
    `book_writer`     VARCHAR(45)       NULL, 
    `book_price`      DECIMAL(18, 0)    NULL, 
    `book_publisher`  VARCHAR(45)       NULL, 
    `book_date`       DATE              NULL, 
    `book_num`        INT               NULL, 
    PRIMARY KEY (book_name)
);";
$sql2 ="CREATE TABLE Administrator
(
    `admin_id`    VARCHAR(45)    NOT NULL, 
    `admin_code`  INT            NULL, 
    PRIMARY KEY (admin_id),
    FOREIGN KEY (admin_id)
 REFERENCES User (user_id)
);";
$sql3 ="CREATE TABLE Book_reservation
(
    `Reservation_id`  INT            NOT NULL    AUTO_INCREMENT, 
    `user_id`         VARCHAR(45)    NOT NULL, 
    `user_call`       VARCHAR(45)    NULL, 
    `user_email`      VARCHAR(45)    NULL, 
    `book_name`       VARCHAR(45)    NOT NULL, 
    `reserved_date`   DATE           NULL, 
    `reserved_time`   TIME           NULL, 
    PRIMARY KEY (Reservation_id),
    FOREIGN KEY (user_id) REFERENCES User (user_id),
    FOREIGN KEY (book_name) REFERENCES Book (book_name)
);";
$sql4 ="CREATE TABLE User_requirement
(
    `require_id`    INT            NOT NULL    AUTO_INCREMENT, 
    `user_id`       VARCHAR(45)    NOT NULL, 
    `user_content`  VARCHAR(45)    NULL, 
    PRIMARY KEY (require_id),
    FOREIGN KEY (user_id)
 REFERENCES User (user_id)
);";
$sql5 ="CREATE TABLE Book_required
(
    `book_require_id`  INT               NOT NULL    AUTO_INCREMENT, 
    `user_id`          VARCHAR(45)       NOT NULL, 
    `book_name`        VARCHAR(45)       NULL, 
    `book_preference`  VARCHAR(45)       NULL, 
    `book_price`       DECIMAL(18, 0)    NULL, 
    `book_num`         INT               NULL, 
    PRIMARY KEY (book_require_id),
    FOREIGN KEY (user_id)
 REFERENCES User (user_id)
);";

$sql6 ="CREATE TABLE User_cookie
(
    `user_id`         VARCHAR(45)    NOT NULL, 
    `lastest_search`  VARCHAR(45)    NULL, 
    PRIMARY KEY (user_id),
    FOREIGN KEY (user_id)
 REFERENCES User (user_id)
);";

if ($db->query($sql0) === true){
    echo "New record created successfully";
}else{
    //echo "error : " . $sql0 . "<br>". $db->error;
}
if ($db->query($sql1) === true){
    echo "New record created successfully";
}else{
    //echo "error : " . $sql1 . "<br>". $db->error;
}
if ($db->query($sql2) === true){
    echo "New record created successfully";
}else{
    //echo "error : " . $sql2 . "<br>". $db->error;
}
if ($db->query($sql3) === true){
    echo "New record created successfully";
}else{
    //echo "error : " . $sql3 . "<br>". $db->error;
}
if ($db->query($sql4) === true){
    echo "New record created successfully";
}else{
   // echo "error : " . $sql4 . "<br>". $db->error;
}
if ($db->query($sql5) === true){
    echo "New record created successfully";
}else{
    //echo "error : " . $sql5 . "<br>". $db->error;
}

if ($db->query($sql6) === true){
    echo "New record created successfully";
}else{
   // echo "error : " . $sql6 . "<br>". $db->error;
}
?>