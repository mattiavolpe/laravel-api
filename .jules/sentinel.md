## 2024-03-24 - Implicit Route Model Binding IDOR
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController. Any authenticated user could access, modify, or delete other users' projects by guessing their slugs.
**Learning:** The codebase utilizes implicit route model binding for user-specific resources but lacks global authorization policies or automatic scoping.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when relying on implicit route model binding for user-specific resources.
