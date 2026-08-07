## 2024-05-18 - Prevent IDOR with Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController` due to implicit route model binding without ownership validation.
**Learning:** Implicit route model binding automatically fetches records but does not scope them to the authenticated user, allowing any authenticated user to access or modify resources belonging to others.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when utilizing route model binding on user-specific resources.
