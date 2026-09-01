/**
 * CC Pardawala — Contact & Consultation Form AJAX Handler
 */
document.addEventListener('DOMContentLoaded', function() {
    
    function setupForm(formId) {
        const form = document.getElementById(formId);
        if (!form) return;

        // Create or get status alert container
        let statusBox = form.querySelector('.form-status-alert');
        if (!statusBox) {
            statusBox = document.createElement('div');
            statusBox.className = 'form-status-alert';
            statusBox.style.display = 'none';
            statusBox.style.padding = '14px 18px';
            statusBox.style.borderRadius = '8px';
            statusBox.style.marginBottom = '20px';
            statusBox.style.fontSize = '0.92rem';
            statusBox.style.lineHeight = '1.5';
            form.prepend(statusBox);
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnHtml = submitBtn ? submitBtn.innerHTML : 'Submit';

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Sending Consultation Request...';
            }

            statusBox.style.display = 'none';

            const formData = new FormData(form);

            fetch('send_mail.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.status === 'success') {
                    statusBox.style.display = 'block';
                    statusBox.style.backgroundColor = 'rgba(197, 168, 128, 0.15)';
                    statusBox.style.border = '1px solid var(--accent-gold)';
                    statusBox.style.color = 'var(--text-primary)';
                    statusBox.innerHTML = `<i class="fa-solid fa-circle-check text-gold me-2"></i> ${data.message}`;
                    form.reset();
                } else {
                    statusBox.style.display = 'block';
                    statusBox.style.backgroundColor = 'rgba(235, 87, 87, 0.15)';
                    statusBox.style.border = '1px solid #EB5757';
                    statusBox.style.color = '#FAF7F2';
                    statusBox.innerHTML = `<i class="fa-solid fa-triangle-exclamation me-2" style="color: #EB5757;"></i> ${data.message}`;
                }
            })
            .catch(err => {
                statusBox.style.display = 'block';
                statusBox.style.backgroundColor = 'rgba(235, 87, 87, 0.15)';
                statusBox.style.border = '1px solid #EB5757';
                statusBox.style.color = '#FAF7F2';
                statusBox.innerHTML = `<i class="fa-solid fa-triangle-exclamation me-2" style="color: #EB5757;"></i> Something went wrong. Please call us directly at +91 95865 41555.`;
            })
            .finally(() => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnHtml;
                }
            });
        });
    }

    // Attach to contact form and index consultation form
    setupForm('contactForm');
    setupForm('consultationForm');
});
