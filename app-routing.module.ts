import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BlogComponent } from './blog/blog.component';
import { Blog1Component } from './blog/blog1/blog1.component';
import { Blog2Component } from './blog/blog2/blog2.component';
import { Blog3Component } from './blog/blog3/blog3.component';
import { Blog4Component } from './blog/blog4/blog4.component';
import { ContactComponent } from './contact/contact.component';
import { FooterComponent } from './footer/footer.component';
import { AboutComponent } from './about/about.component';
import { GroomingComponent } from './grooming/grooming.component';
import { TestimonialsComponent } from './testimonials/testimonials.component';
import { FaqsComponent } from './faqs/faqs.component';
import { QuestionsComponent } from './questions/questions.component';
import { PicComponent } from './pic/pic.component';


const routes: Routes = [{path:'questions',component:QuestionsComponent},{path:'contact',component:ContactComponent},{path:'pic',component:PicComponent},{path:'testimonials',component:TestimonialsComponent},{path:'footer',component:FooterComponent},{path:'grooming',component:GroomingComponent},{path:'about',component:AboutComponent},{path:'blog',component:BlogComponent,children:[{path:"blog1",component:Blog1Component},{path:"blog2",component:Blog2Component},{path:"blog3",component:Blog3Component},{path:"blog4",component:Blog4Component}]}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
