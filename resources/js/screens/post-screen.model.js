import {BaseModel} from "../models/base.model.js";
import {useStore} from "pinia-class-store";


class PostModel extends BaseModel {
    constructor() {
        super();
        this.post = undefined;
    }

    init(post) {
        this.post = post;
    }
}

export const postModel = useStore.bind(undefined, PostModel);
