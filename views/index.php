<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            .sl_done, .sl_cancel {
                cursor: pointer;
            }
            .sl_items > div {
                margin-bottom: 5px;
            }
            .sl_name {
                margin-bottom: 10px;
            }
        </style>
        <script>
            function addItem(button) {
                const   slItem = document.createElement('div'),
                        slItemInner = `<input type="text" name="names[]">
                                    <button class="sl_cancel" onclick="cancel(this)">cancel</span>`;
                
                slItem.innerHTML = slItemInner;
                
                button.insertAdjacentElement('beforeBegin',slItem);
            }
            
            function cancel(e) {
                e.parentElement.remove();
            }
        </script>
    </head>
    <body>
        <div class="shoppingList">
            <div class="sl_name">
                <span>Shopping List</span>
            </div>
            <form action="index.php?route=save" method="post">
                <?php if ($this->slItems) 
                    foreach($this->slItems as $slItem) {
                        ?>
                            <div><?=$slItem->item_id?>. <span> <?=$slItem->item_title?> </span></div>
                        <?php
                    }
                ?>
                
                <div class="sl_items">
                    <button type="button" onclick="addItem(this)">+ Add New Item</button>
                </div>
                
                <button type="submit">Save</button>
            </form>
        </div>
    </body>
</html>