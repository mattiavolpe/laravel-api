## 2024-05-15 - IDOR in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) due to missing ownership checks on implicitly bound models.
**Learning:** Controllers utilizing Laravel implicit route model binding do not automatically scope to the authenticated user unless explicitly checked or handled via Policies.
**Prevention:** Always verify model ownership (e.g., `$model->user_id != auth()->id()`) or use Laravel Policies when injecting models into controller methods.
