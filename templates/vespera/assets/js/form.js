(function () {
  document.addEventListener('DOMContentLoaded', function () {
    if (!window.intlTelInput) return;

    var initial = (document.body.dataset.phoneCountry || 'us').toLowerCase();
    var forms = document.querySelectorAll('.js-lead-form');
    if (!forms.length) return;

    forms.forEach(function (form) {
      var input = form.querySelector('.js-phone-input') || form.querySelector('input[name="phone"]');
      if (!input) return;

      var iti = window.intlTelInput(input, {
        initialCountry: initial,
        preferredCountries: [initial, 'us', 'gb', 'de'],
        utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.3/build/js/utils.js',
        separateDialCode: true,
        nationalMode: true,
      });

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        var msg = form.querySelector('.form-msg');
        var hp = form.querySelector('[name="company_url"]');
        if (hp && hp.value) return;

        var first = form.querySelector('[name="first_name"]');
        var last = form.querySelector('[name="last_name"]');
        var email = form.querySelector('[name="email"]');
        var ok = first && first.value.trim() && last && last.value.trim() && email && email.value.trim();
        var phoneOk = iti.isValidNumber ? iti.isValidNumber() : input.value.trim().length > 4;

        if (!ok || !phoneOk) {
          if (msg) {
            msg.className = 'form-msg err';
            msg.textContent = form.dataset.err || 'Please fill in all required fields correctly.';
          }
          return;
        }

        if (msg) {
          msg.className = 'form-msg ok';
          msg.textContent = form.dataset.ok || 'Thank you — your request was received locally.';
        }
        form.reset();
        try { iti.setCountry(initial); } catch (err) {}
      });
    });
  });
})();
