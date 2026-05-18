## 2026-05-18 - Prevent IDOR in Admin Controllers
**Vulnerability:** Implicit route model binding was used in Admin controllers (Project, Type, Technology) without explicit ownership checks, allowing Insecure Direct Object Reference (IDOR).
**Learning:** Laravel Policies are not implemented globally. Models like Type and Technology are user-owned entities and require manual authorization checks in controller methods.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) when using route model binding for user-owned resources, using loose comparison to avoid false positives.
