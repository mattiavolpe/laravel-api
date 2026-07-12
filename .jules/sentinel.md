## 2024-07-12 - Fix IDOR in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `show`, `edit`, `update`, and `destroy` methods of `ProjectController`.
**Learning:** Implicit Route Model Binding in Laravel controllers does not enforce ownership checks unless explicit Policies or manual checks are implemented.
**Prevention:** Always implement explicit authorization checks (e.g., `auth()->id() == $model->user_id` or via Laravel Policies) on endpoints that access or modify resources belonging to specific users.
