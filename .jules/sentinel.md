## 2024-11-02 - Fix IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController. The `show`, `edit`, `update`, and `destroy` methods use implicit route model binding to fetch projects without checking if the authenticated user owns the project.
**Learning:** Implicit route model binding in controllers for user-specific resources requires manual ownership checks if strict authorization policies are not implemented. Without this, any authenticated user can view, edit, or delete resources belonging to other users.
**Prevention:** Always implement explicit ownership checks (e.g., comparing model's `user_id` to `auth()->id()`) or use Laravel's Authorization policies for resource controllers handling user-specific data.
