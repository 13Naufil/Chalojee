<?php

function get_rating($data)
{
    switch ($data){
        case "OneStar":
            echo '<i class="fa fa-star"></i>';
            break;
        case "TwoStar":
            echo '<i class="fa fa-star"></i><i class="fa fa-star"></i>';
            break;
        case "ThreeStar":
            echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
            break;
        case "FourStar":
            echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
            break;
        case "FiveStar":
            echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
            break;
        default:
            echo '';
    }
}

function get_tripadvisor_rating($data)
{
    switch ($data){
        case 1:
            echo '<img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" />';
            break;
        case 1.5:
            echo '<img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/half-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" />';
            break;
        case 2:
            echo '<img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" />';
            break;
        case 2.5:
            echo '<img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/half-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" />';
            break;
        case 3:
            echo '<img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" />';
            break;
        case 3.5:
            echo '<img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/half-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" />';
            break;
        case 4:
            echo '<img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" />';
            break;
        case 4.5:
            echo '<img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/half-circle.png" />';
            break;
        case 5:
            echo '<img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" /><img src="'.base_url().'img/full-circle.png" />';
            break;
        default:
            echo '<img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" /><img src="'.base_url().'img/full-empty-circle.png" />';
    }
}

?>