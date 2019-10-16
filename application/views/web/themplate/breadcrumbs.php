
	<div class="breadcrumbs d-flex flex-row align-items-center">
		<ul>
			<?php 
                $curenturl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $url = base_url();
                $potonnganurl = explode('?', $curenturl);
                $usesurl = $potonnganurl[0];
                $bread = str_replace(base_url(),"", $usesurl);
                $bread = "home/".$bread;
                $bread = str_replace("-merek-","/",$bread);
                $bread = str_replace("-baca-","/",$bread);
                $bread = str_replace("-"," ",$bread);
                $bread = explode("/", $bread);
                for ($i=0; $i < count($bread); $i++) {
                	if($bread[$i]=='home'){
	                    $url = $url.str_replace(" ","-","");
                	}else{
                        if(strpos($bread[$i], 'timbangan')){ 
                            $data = "timbangan?page=1&sortir=nama-asc&type=".str_replace(" ","-",$bread[$i]);
                        }else{
                            $data = "artikel?page=1&sortir=nama-asc&type=".str_replace(" ","-",$bread[$i]);
                        }
	                    $url = $url.$data;
                	}
                    if($i < (count($bread)-1)){ ?>
                        <li><a href="<?php echo $url ?>"><?php echo ucwords($bread[$i]) ?></a></li>
                        <li> <span class="bread-slash">/</span></li>
                    <?php 
                    } else{ ?>
                        <li><span class="bread-blod"><?php echo ucwords($bread[$i]) ?></span>     
                <?php  
                }
            } ?>
		</ul>
	</div>
