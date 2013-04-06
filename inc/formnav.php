<nav id="nav-Form">
    <ul>
        <?php 
        $thisNav = $this->formNav;

        foreach($thisNav as $page) :

        $thisURL = $page['url'];
        $isActive = $this->formNav == $thisURL;
        ?>

        <li>
            <a<?php echo $isActive ? ' class="active"' : '' ?> href="<?php echo $thisURL?>.php"><?php echo $page['title'] ?></a>
        </li>

        <?php endforeach ?>
    </ul>
</nav>