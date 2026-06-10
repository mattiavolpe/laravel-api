## 2024-06-10 - ProjectController Authorization Bypass (IDOR)
**Vulnerability:** Missing authorization checks in `show`, `edit`, `update`, and `destroy` methods of `ProjectController`. Users can view, edit, or delete projects belonging to other users by changing the ID in the URL.
**Learning:** Implicit route model binding does not automatically enforce ownership. Unless explicitly checked (or restricted via policies), any authenticated user can perform operations on any model.
**Prevention:** Always verify model ownership (`$model->user_id == auth()->id()`) or use Laravel Policies when returning/modifying specific models associated with users.
