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

        <li class="stepN<?php echo $val['step'] ?> <?php echo $isActive ? 'active' : '' ?> <?php if ($isDone) echo 'done'; else if (!$isActive) echo 'todo'; ?>">
            <a href="<?php echo $thisURL?>.php"><div><?php echo $val['step'] ?></div><div><?php echo $val['title'] ?></div></a>
        </li>

        <?php
            endforeach
        ?>
    </ol>
</nav>