<?php
session_start();
include 'connection.php';
$username = $_SESSION['user_name'];

if(!isset($username))
{
    header('location:login.php'); 
}

$query = "select * from secetable where username='$username'";

$data = mysqli_query($conn, $query);

$totRec = mysqli_num_rows($data);

$res = mysqli_fetch_assoc($data);


echo "Welcome ".$res['name'];


?>
<br><br>
<img src="<?php echo $res['photo'] ?>" alt="" hspace="10" vspace="10" align="left">
<p align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio in vel voluptatem temporibus mollitia quod quia, itaque molestiae enim, autem pariatur recusandae incidunt neque numquam explicabo harum, reprehenderit aliquam aut ipsa. Perspiciatis laudantium reprehenderit harum sit, doloribus sed ex minima nisi ipsum similique optio fugit adipisci magni libero totam? Placeat ducimus non aspernatur alias saepe officiis, nemo quas! Dolorum suscipit cumque consectetur asperiores qui et eaque amet facere, pariatur laudantium nihil ullam atque libero, ex numquam animi consequuntur magni ipsum tempore assumenda porro tenetur rerum aliquid voluptate? Numquam, cupiditate! Ipsam ab sunt culpa porro eius. Beatae at ipsam corporis molestias optio dicta! Illum qui, aut ullam neque delectus ducimus voluptas ab. Soluta maxime facilis voluptatem iure totam non, rerum cum quaerat earum nisi reiciendis, numquam iusto et eaque expedita obcaecati illo nam est nostrum necessitatibus nulla qui. Iusto odio facilis saepe distinctio impedit error neque eum mollitia. Aspernatur iusto nulla, maxime necessitatibus minus reprehenderit eligendi qui sapiente quibusdam ad architecto maiores ipsa doloribus autem ipsam! Quia tempora, dolorum adipisci fuga perferendis dignissimos accusantium vel velit enim asperiores iusto error, delectus reiciendis quisquam non iure provident mollitia beatae, nesciunt sit! Perspiciatis illum quo amet quam mollitia, odio explicabo laborum, dicta ducimus repellendus vero voluptate aperiam blanditiis deleniti, molestiae itaque quos magnam? Rem minima recusandae minus voluptatum sapiente consequatur molestias blanditiis cum ullam. Unde inventore molestiae eligendi placeat exercitationem quae ipsam vero quam sunt similique sequi dolore molestias mollitia, cum praesentium consequuntur esse nesciunt quasi eum modi ad provident ex perspiciatis iusto. Officiis ratione repellendus laboriosam temporibus culpa. Corrupti hic est velit consequatur nihil reprehenderit illum. Quos dolorem ipsa nam. Error similique eum quas voluptas fugiat sed voluptate nemo natus. Dolores eos necessitatibus esse soluta unde repellat velit blanditiis, eius ex ducimus quidem tempore consectetur saepe qui quod amet labore tempora facilis nihil natus harum eum culpa! Eligendi qui placeat odit repellendus quis, nostrum nobis quia fugit cumque voluptatem voluptates magni asperiores maxime animi deleniti, voluptate repudiandae esse velit facere inventore! Reiciendis ad mollitia illo beatae minus quod sit architecto veritatis quae iste deleniti accusantium similique consectetur, vel, odit soluta molestiae corporis debitis! Iure, repellat facilis quasi mollitia, dignissimos dolor inventore fugiat et eos omnis voluptas dicta ut nulla iste consequuntur tempore laudantium numquam consectetur quis culpa cumque sint aspernatur ab modi. Beatae ut autem quaerat distinctio commodi quae, neque tempore inventore reiciendis quasi, saepe nemo dolor dicta vel enim laboriosam sed. Iusto et reprehenderit sed laborum ex labore, inventore ipsam similique rerum facere ab velit eum repellat impedit veritatis enim. Laboriosam deleniti quidem ipsum iusto cumque repellendus vero temporibus sint fuga repellat? Iusto illo perspiciatis omnis vero facere ipsam libero qui laudantium reiciendis officiis quam repellendus sed, illum similique aperiam magni veritatis quisquam ducimus assumenda nemo, animi totam quos commodi voluptates. Eius possimus accusantium beatae itaque exercitationem laborum facilis eaque! Ratione quisquam amet excepturi ut aliquam neque dolores illo aut accusamus. Officia dicta autem doloremque doloribus fugit nemo ducimus incidunt nisi quo id, dolorum impedit ad molestias necessitatibus dolorem nam sequi.</p>

<a href="logout.php">Logout</a>