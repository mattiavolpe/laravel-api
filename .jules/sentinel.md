## 2024-05-31 - IDOR in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `show`, `edit`, `update`, and `destroy` methods of `ProjectController`.
**Learning:** Laravel's implicit route model binding does not automatically enforce user ownership authorization checks.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on user-specific resources when using route model binding.
