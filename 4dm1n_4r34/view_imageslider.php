<h3 class="text-center text-success">All products</h3>
    <table class="table table-bordered mt-4">
        <thead class="bg-danger">
            <tr>
                <th class= "text-light">Banner id</th>
                <th class= "text-light"> Description</th>
                <th class= "text-light">Image</th>
                <th class= "text-light">Edit</th>
                <th class= "text-light">Delete</th>
            </tr>
            <tbody class="bg-dark text-light">
                <?php 
                    $get_banner="Select * from `banner`";
                    $number=0;
                    $result=mysqli_query($con,$get_banner);
                    while($row=mysqli_fetch_assoc($result)){
                        $banner_id =$row['banner_id'];
                        $banner_title =$row['banner_title'];
                        $banner_image =$row['banner_image'];
                        $number++;
                        ?>
                        <tr class = 'text-center'>
                        <td><?php echo $banner_id; ?></td>
                        <td><?php echo $banner_title; ?></td>
                        <td><img src = '../banner/<?php echo $banner_image; ?>' class= 'product_img'/></td>
                      <td>
                        <a href='index.php?edit_imageslide=<?php echo $banner_id; ?>' class = 'text-light'> 
                          <i class = 'fa-solid fa-pen-to-square'></i>
                        </a>
                      </td>
                      <td>
                          <a href='index.php?delete_imageslide=<?php echo $banner_id; ?>' class = 'text-light'>
                          <i class = 'fa-solid fa-trash'></i>
                      </td>
                    </tr>
                <?php
                    }
                ?>
               
            </tbody>
        </thead>
    </table>
