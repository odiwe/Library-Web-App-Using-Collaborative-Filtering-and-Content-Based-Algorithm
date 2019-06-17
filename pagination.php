<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/12/2017
 * Time: 3:48 PM
 */

         include "connection.php";
         $rec_limit = 9;

         if(! $conn ) {
            die('Could not connect: ' . mysqli_error($conn));
         }

         /* Get total number of records */
         $sql = "SELECT count(id) FROM products ";
         $retval = mysqli_query( $conn, $sql );

         if(! $retval ) {
            die('Could not get data: ' . mysqli_error($conn));
         }
         $row = mysqli_fetch_array($retval, MYSQLI_NUM );
         $rec_count = $row[0];

         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }

         $left_rec = $rec_count - ($page * $rec_limit);
         $sql = "SELECT * FROM products LIMIT $offset, $rec_limit";

         $retval = mysqlI_query( $conn, $sql );

         if(! $retval ) {
            die('Could not get data: ' . mysqli_error($conn));
         }

         while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
             echo "
                        <div class='col-md-4 col-sm-6'>
                            <div class='books-listing-4'>
                                <div class='kode-thumb'>
                                    <a href='book-detail?book_id={$row['id']}'><img src='{$row['Pix']}' alt=''></a>
                                </div>
                                <div class='kode-text'>
                                    <h3><a href='book-detail.php?book_id={$row['id']}'>{$row['Name']}</a></h3>
                                </div>
                                <div class='book-price'>
                                    <p>{$row['Price']}</p>
                                </div>
                                <a href='book-detail.php?book_id={$row['id']}' class='add-to-cart'>Read</a>
                            </div>
                        </div>";
     }
        echo"</div>";
         if( $page > 0 ) {
            $last = $page - 2;
             echo"    <nav>
							<ul class='pagination'>
								<a href='pagination.php?page=$last' aria-label='Previous'>
                                <span aria-hidden='true'>&laquo;</span>
                              </a>
                              <a href='pagination.php?page=$page' aria-label='Next'>
                                <span aria-hidden='true'>&raquo;</span>
                              </a>
							</ul>
						</nav>";
         }else if( $page == 0 ) {
             echo "    <nav>
							<ul class='pagination'>
							<a href='pagination.php?page=$page' aria-label='Next'>
                                <span aria-hidden='true'>&raquo;</span>
                              </a>
							</ul>
						</nav>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
             echo "<nav>
							<ul class='pagination'>
                              <a href='pagination.php?page=$last' aria-label='Previous'>
                                <span aria-hidden='true'>Last</span>
                              </a>
							</ul>
						</nav>";
         }

         mysqli_close($conn);
?>