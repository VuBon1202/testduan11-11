<div class="boxright">
    <div class="col-md-3 dm2 ">
                    <ul class="list-group ">
                   
                        <div class="dm3">
                           <ul class="">
                           <?php
                                foreach($dsdm as $dm){
                                    extract($dm);
                                    $linkdm = "index.php?act=sanpham&iddm=".$id;
                                    echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                                }
                            ?>
                           </ul>
                        </div>
                    </ul>
    </div>
</div>
<style>
                .boxright{
                    border-left: 0.5px solid gray;
                    
                }
                .dm {
                    background-color: #DC3545 !important;
                    border: 10px solid #DC3545 !important;
                    text-align: center;
                    border-radius: 0% !important;
                    
                    
                }

                .dm2{
                   
                    width: 300px;
                    margin-left: 20px;

                }
                .dm2 ul li {
                    border-radius: 0% !important;
                }


                .dm2 li a {
                    text-decoration: none !important;
                    color: black;
                }

                .dm2 li a:hover {
                    color: #ff0000;
                    opacity: 0.7;

                }
                

                .dm2 li:hover {
                    transform: scale(1.01);
                    color: #d51b2e;
                    border-left: 2px solid #d51b2e;
                    cursor: pointer;
                }
                .top6{
                    display: block;
                    
                }
                .top6 img{
                    width: 25%;
                }

                .top6 a{
                    color: #666;
                    text-decoration: none;
                }

                .top6 a:hover{
                    color: #e41212;
                    text-decoration: underline;
                }
                .spnew{
                    text-align: center;
                    font-size: 20px;
                    margin-top: 20px;
                    font-weight: 700;
                    color: #d51b2e;
                }
                
            </style>
   

                    