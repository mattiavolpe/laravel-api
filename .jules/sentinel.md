## 2024-05-18 - Missing Authorization (IDOR) in Eloquent Models

**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project, Type, and Technology resource controllers. `Auth::id()` was properly set on create/store but missing from `show`, `edit`, `update`, and `destroy` resulting in any authenticated user being able to access other users' entities if they know the ID/slug.
**Learning:** Laravel implicitly binds models in resourceful routes. But implicit binding by default doesn't enforce ownership. Without explicit checks (like `Gate`, `Policy`, or `$model->user_id != auth()->id()` manually in controller), any bound model can be retrieved. `!=` should be used instead of `!==` to avoid type mismatch between integer database IDs and authenticated user ID.
**Prevention:** Either establish standard Laravel Policies for all user-owned models and apply middleware `can:view,model`, or consistently enforce ownership directly in resourceful methods.
