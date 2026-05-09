## 2024-05-24 - IDOR in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) via implicit route model binding in Resource Controllers.
**Learning:** Laravel's route model binding automatically retrieves models based on URL parameters but does not automatically scope them to the authenticated user unless explicitly instructed.
**Prevention:** Always verify `$model->user_id != auth()->id()` or use Laravel Policies when accessing user-owned models via route model binding.