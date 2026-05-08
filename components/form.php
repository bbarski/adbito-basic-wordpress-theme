 <section class="custom-form-section">
        <div class="container">
            <h2><?php echo esc_html($form['title']); ?></h2>
            <p><?php echo esc_html($form['description']); ?></p>

            <form id="custom-contact-form" method="post" action="#">
                <?php foreach ($form['fields'] as $field): ?>
                    <div class="form-group">
                        <label for="<?php echo esc_attr($field['name']); ?>">
                            <?php echo esc_html($field['label']); ?>
                            <?php if ($field['required']): ?>
                                <span class="required">*</span>
                            <?php endif; ?>
                        </label>

                        <?php if ($field['type'] === 'textarea'): ?>
                            <textarea
                                name="<?php echo esc_attr($field['name']); ?>"
                                id="<?php echo esc_attr($field['name']); ?>"
                                placeholder="<?php echo esc_attr($field['placeholder']); ?>"
                                <?php echo $field['required'] ? 'required' : ''; ?>
                                class="form-control"
                            ></textarea>
                        <?php else: ?>
                            <input
                                type="<?php echo esc_attr($field['type']); ?>"
                                name="<?php echo esc_attr($field['name']); ?>"
                                id="<?php echo esc_attr($field['name']); ?>"
                                placeholder="<?php echo esc_attr($field['placeholder']); ?>"
                                <?php echo $field['required'] ? 'required' : ''; ?>
                                class="form-control"
                            >
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

                <div class="form-group">
                    <button type="submit" class="<?php echo esc_attr($form['submit_button']['class']); ?>">
                        <?php echo esc_html($form['submit_button']['text']); ?>
                    </button>
                </div>
            </form>
        </div>
    </section>