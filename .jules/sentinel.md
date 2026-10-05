## 2024-10-05 - Missing Authorization in Implicit Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources where any authenticated user could modify or delete other users' projects.
**Learning:** Implicit route model binding in Laravel fetches the model by ID/slug, but does not automatically enforce user ownership.
**Prevention:** Manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on all user-specific resource controller methods (`show`, `edit`, `update`, `destroy`).
