## 2024-05-18 - Fix IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) allowed any authenticated user to view, edit, or delete other users' projects via implicit route model binding without ownership checks.
**Learning:** Implicit route model binding in Laravel retrieves the model by ID/slug but does not automatically scope it to the currently authenticated user.
**Prevention:** Always verify ownership (e.g. `if ($model->user_id != auth()->id()) abort(403);`) or use scoped route bindings for user-specific resources.
