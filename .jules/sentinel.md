## 2024-03-01 - Missing Authorization Checks in Resource Controllers
**Vulnerability:** IDOR (Insecure Direct Object Reference) in ProjectController. Users could access, modify, or delete other users' projects by guessing their IDs, because route model binding didn't check ownership.
**Learning:** Implicit route model binding automatically retrieves the model, but does NOT enforce authorization.
**Prevention:** Always implement explicit authorization checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Policies when accessing user-specific resources via route model binding.
