## 2024-09-14 - Fix IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources.
**Learning:** Implicit route model binding in Laravel doesn't automatically check for user ownership unless explicitly scoped or manually verified.
**Prevention:** Always verify that the currently authenticated user owns the resource being accessed in controller methods (`show`, `edit`, `update`, `destroy`) using `if ($model->user_id != auth()->id()) abort(403);` or route scoping.
