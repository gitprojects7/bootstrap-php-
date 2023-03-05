<h3 class="text-center text-success">All products</h3>
    <table class="table table-bordered mt-4">
        <thead class="bg-danger">
            <tr>
                <th class= "text-light">Product_id</th>
                <th class= "text-light"> Doujin Title</th>
                <th class= "text-light">Image</th>
                <th class= "text-light">Price</th>
                <th class= "text-light">link</th>
                <th class= "text-light">Edit</th>
                <th class= "text-light">Delete</th>
            </tr>
            <tbody class="bg-dark text-light">
                <?php 
                    $get_products="Select * from `products`";
                    $number=0;
                    $result=mysqli_query($con,$get_products);
                    while($row=mysqli_fetch_assoc($result)){
                        $product_id =$row['product_id'];
                        $product_title =$row['product_title'];
                        $product_image1 =$row['product_image1'];
                        $product_image2 =$row['product_image2'];
                        $product_image3 =$row['product_image3'];
                        $product_price =$row['product_price'];
                        $product_link =$row['product_link'];
                        $number++;
                        ?>
                        <tr class = 'text-center'>
                        <td><?php echo $product_id; ?></td>
                        <td><?php echo $product_title; ?></td>
                        <td><img src = './product_images/<?php echo $product_image1; ?>' class= 'product_img'/></td>
                        <td><?php echo $product_price; ?></td>
                        <td>
                        <?php echo $product_link; ?>
                        </td>
                      <td>
                        <a href='index.php?edit_products=<?php echo $product_id; ?>' class = 'text-light'> 
                          <i class = 'fa-solid fa-pen-to-square'></i>
                        </a>
                      </td>
                      <td>   
                        <a href='index.php?delete_product=<?php echo $product_id; ?>' class = 'text-light'>
                          <i class = 'fa-solid fa-trash'></i>
                      </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </thead>
    </table>
