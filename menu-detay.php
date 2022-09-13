<?php include 'header.php'; 


//BELİRLİ VERİYİ SEÇME İŞLEMİ
$menusor=$db->prepare("SELECT * FROM menu where menu_seourl=:sef");
$menusor->execute(array(
  'sef' =>$_GET['sef']
));

$menucek=$menusor->fetch(PDO::FETCH_ASSOC);
error_reporting(E_ALL);




?>

    
	<div class="container">
		
		<div class="row">
			<div class="col-md-9"><!--Main content-->

            <div class="title-bg">
					<div class="title"><?php echo $menucek['menu_ad']   ?></video></div>
		    </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UqtBQ7j5LPI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <div class="title-bg">
					<div class="title">Misyon</div>
		    </div>

                <blockquote> <?php echo $menucek['menu_misyon'];?> </blockquote>


                <div class="title-bg">
					<div class="title">Vizyon </div>
				</div>
                <blockquote><?php echo $menucek['menu_vizyon'];?></blockquote>  
			   <div class="title-bg">
					<div class="title"><?php echo $menucek['menu_başlık']; ?> </div>
				</div>
				<div class="page-content">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusy standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesettin industry. 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde maiores libero possimus quibusdam facilis enim, sed iste veritatis quasi culpa numquam ratione harum voluptatibus odit corrupti. Maiores impedit unde voluptas animi blanditiis molestias, nesciunt doloribus, quisquam hic ad exercitationem! Quo eaque ratione commodi alias, nemo magni ipsam minima repudiandae amet.
					</p>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusy standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesettin industry. 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus necessitatibus veniam vitae minima quis sed explicabo, voluptatem aut dignissimos earum, maxime quam atque fuga eveniet debitis cum magnam perferendis. Aspernatur asperiores voluptatem expedita eaque? Quibusdam, cupiditate beatae? Doloremque voluptatibus enim officia nobis? Fugiat molestiae architecto sed aperiam, adipisci pariatur qui perferendis id odit eligendi! Quos, veniam quas eligendi aspernatur doloremque pariatur beatae laborum in, ab eius ratione, consectetur ipsam veritatis inventore sunt recusandae itaque ut? Sapiente, accusamus dolorem vel asperiores eius quam facilis harum saepe praesentium deserunt unde et rem minus aut voluptatibus fugit rerum nam, architecto beatae. Dolor, laboriosam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae blanditiis, assumenda recusandae veniam cum cumque reiciendis obcaecati autem, enim quas quia sapiente officia nihil voluptate non inventore aperiam vitae qui suscipit deleniti necessitatibus! Molestiae libero natus harum ea, facilis error voluptatem pariatur in? Placeat commodi rem nisi porro ipsum quibusdam quae nesciunt maxime recusandae cumque, atque laboriosam veritatis. Eveniet sunt soluta similique labore, maxime maiores, assumenda aliquam excepturi, sequi laboriosam magnam? Amet possimus impedit perferendis eius, nobis voluptas quisquam delectus! Impedit dicta a delectus nulla iure et id quis aliquid autem nobis. Quae impedit, quibusdam similique aut corrupti dignissimos saepe unde eligendi obcaecati. Nemo, aut quo. Dolorem, distinctio nihil? Esse eveniet amet quasi tempore doloremque qui totam deserunt veniam, dolorum provident culpa, harum eius adipisci temporibus hic laboriosam accusamus. Consequatur modi accusantium odio nostrum corporis vitae deleniti at enim voluptates reiciendis sit eligendi animi tempore maxime, rerum labore velit temporibus neque minus, minima natus delectus iusto quos earum. Atque molestiae harum animi voluptates facere iste recusandae provident dolorem, ullam soluta id! Sunt, incidunt cupiditate? Voluptate eveniet architecto numquam excepturi voluptatem recusandae ullam dolorem temporibus voluptas, atque illum, nemo quae omnis laboriosam veniam quis nobis libero maiores saepe, ipsa delectus soluta.
					</p>
				</div>
             
                
                    </div>
			
            
                <!--sidebar-->
    
            <?php include 'sidebar.php'; ?>

		</div>
		<div class="spacer"></div>
	</div>
	
	<?php include 'footer.php'; ?>