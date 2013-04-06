<nav id="nav-Form">
    <ol class="nav nav-pills">
        <?php 
        $thisNav = $this->formNav;

        foreach($thisNav as $page) :

        $thisURL = $page['url'];
        $isActive = $this->navTitle === $thisURL;
        ?>

        <li class="<?php echo $isActive ? 'active' : '' ?>">
            <a href="<?php echo $thisURL?>.php"><?php echo $page['title'] ?></a>
        </li>

        <?php endforeach ?>
    </ol>
</nav>