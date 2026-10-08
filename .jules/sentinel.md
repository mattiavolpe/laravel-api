## 2024-10-08 - IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `show`, `edit`, `update`, and `destroy` methods allowing any user to access or modify other users' projects.
**Learning:** Implicit route model binding does not automatically enforce user ownership.
**Prevention:** Always manually verify model ownership (e.g., `$model->user_id != auth()->id()`) against the authenticated user on user-specific resources.
