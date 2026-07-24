## 2024-07-24 - IDOR in implicit route model binding
**Vulnerability:** Missing authorization checks on ProjectController actions (show, edit, update, destroy) allowed users to modify other users' projects via IDOR.
**Learning:** Implicit route model binding without Laravel Policies leaves models unprotected if explicit ownership checks are omitted in controller actions.
**Prevention:** Always implement authorization checks (e.g., Policies or explicit checks like $model->user_id == auth()->id()) when using route model binding for user-specific resources.
