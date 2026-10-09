## 2023-10-09 - Missing Explicit Ownership Checks on Route Model Bindings
**Vulnerability:** IDOR in user-specific controllers (e.g., ProjectController) allowing any authenticated user to view/edit/delete other users' resources.
**Learning:** The codebase relies on implicit route model binding, which automatically fetches records by ID but does not apply user authorization constraints, leaving resources globally accessible.
**Prevention:** Always enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on all user-specific resource controller methods (show, edit, update, destroy).
