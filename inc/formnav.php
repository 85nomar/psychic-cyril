<nav id="formNav">
    <ol class="stepIndicator nav nav-pills">
        <?php 
            $thisNav = $this->formNav;
            $activeStepPos;

            foreach($thisNav as $index => $val) {
                if($val['url'] === $this->navTitle) {
                    $activeStepPos = $index;
                    break;
                }
            }

            foreach($thisNav as $index => $val) :

            $thisURL = $val['url'];
            $isActive = $index == $activeStepPos;
            $isDone = $index < $activeStepPos;
        ?>

        <li class="<?php echo $isActive ? 'active' : '' ?> <?php if ($isDone) echo 'done'; else if (!$isActive) echo 'todo'; ?>">
            <a href="<?php echo $thisURL?>.php"><span><?php echo $val['title'] ?></span></a>
        </li>

        <?php
            endforeach
        ?>
    </ol>
</nav>