<?php
include 'connection.php';
session_start();

$user = $_SESSION['login_user'];

if(isset($_SESSION['login_user']))
{

}
else
{
    header('location:login.php');
}


$query = "select * from secdtable where username='$user'";

$data = mysqli_query($conn, $query);

$result = mysqli_fetch_assoc($data);

echo "welcome ".$result['name']."<br>";

echo "<img width = '100' src='$result[photo]'>";

?>

<p align="justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti veritatis aspernatur laborum velit unde in voluptatem iste voluptates illo, impedit necessitatibus magnam nam aliquid voluptas exercitationem eligendi hic blanditiis quo dicta ex dolor, nostrum nihil quas eum! Rerum cupiditate doloremque ducimus aliquid eligendi quam commodi ullam, obcaecati tempora placeat accusamus facilis veritatis, totam ratione, autem officiis distinctio architecto deleniti id vitae. Doloremque at iusto facilis quo eveniet maxime amet voluptatem, vitae quos aliquid nam dolore voluptatum distinctio rerum quisquam perspiciatis, quas, consequuntur itaque assumenda deserunt tenetur temporibus cum. Beatae eaque labore sint nostrum culpa, cum quibusdam repellendus et necessitatibus libero repellat, id esse neque vitae reprehenderit voluptatum animi dignissimos est, iste illum eos! Explicabo quam iste, et totam recusandae aperiam delectus excepturi officiis, repellendus amet nisi? Fugiat eum hic, iusto totam modi aliquid, animi quis, aperiam libero aliquam laborum debitis repellat. Alias molestiae laborum sed facilis adipisci, corrupti enim repellat. Dolores quisquam odio sapiente laborum fuga, tempore quis voluptatem blanditiis cum eveniet enim beatae atque magnam, modi repellendus architecto, hic culpa asperiores molestias exercitationem rem repellat praesentium aspernatur repudiandae? Voluptate ducimus impedit perferendis quae ipsum et sed asperiores fuga, architecto aliquam facere debitis sequi accusamus nobis doloremque dicta labore natus.
</p>
<a href="logout.php">Logout</a>
