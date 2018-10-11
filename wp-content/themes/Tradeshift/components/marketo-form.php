<?php

global $marketo_forms;
$marketo_forms[] = $marketo_form_id;

?>

<div class="modal fade" id="mktoForm-<?php echo $marketo_form_id; ?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 id="myModalLabel">Ready to explore your options?</h3>
                <p class="lead">We’ll contact you to set up a time to talk.</p>
            </div>
            <div class="modal-body">
                <form id="<?php echo "mktoForm_" . $marketo_form_id; ?>"></form>

                <?php if (isset($marketo_forms[$marketo_form_id])): ?>
                    <script type="text/javascript">
                        window.addEventListener('DOMContentLoaded', function() {
                            MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", <?php echo $marketo_form_id; ?>);
                        });
                    </script>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
