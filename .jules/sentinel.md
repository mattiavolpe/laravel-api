## 2024-05-24 - Prevent IDOR in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController` methods (`show`, `edit`, `update`, `destroy`) due to lack of ownership validation when using implicit route model binding.
**Learning:** Implicit route model binding automatically fetches records but doesn't check authorization, requiring manual ownership checks (or Laravel Policies) to prevent users from accessing or modifying records they don't own.
**Prevention:** Always verify ownership (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when returning objects via route model binding in controllers.
