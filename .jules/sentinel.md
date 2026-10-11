## 2023-10-11 - IDOR in Implicit Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) where users can access or modify other users' projects by guessing the slug in the URL.
**Learning:** Laravel's implicit route model binding automatically resolves models but does not enforce user ownership authorization by default unless specifically implemented via Policies or manual checks.
**Prevention:** Always implement explicit authorization checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when exposing user-specific resources via route model binding.
